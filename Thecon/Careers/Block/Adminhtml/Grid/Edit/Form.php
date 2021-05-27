<?php
namespace Thecon\Careers\Block\Adminhtml\Grid\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    protected $_systemStore;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Thecon\Careers\Model\Status $options,
        array $data = []
    ) {
        $this->_options = $options;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Prepare form.
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                            'id' => 'edit_form',
                            'enctype' => 'multipart/form-data',
                            'action' => $this->getData('action'),
                            'method' => 'post'
                        ]
            ]
        );

        $form->setHtmlIdPrefix('thcareers_');
        if ($model->getEntityId()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit Career Information'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('entity_id', 'hidden', ['name' => 'entity_id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add Career Information'), 'class' => 'fieldset-wide']
            );
        }

        $fieldset->addField(
            'job_name',
            'text',
            [
                'name' => 'job_name',
                'label' => __('Title'),
                'id' => 'job_name',
                'title' => __('Title'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $fieldset->addField(
            'job_type',
            'text',
            [
                'name' => 'job_type',
                'label' => __('Type'),
                'id' => 'job_type',
                'title' => __('Type'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $fieldset->addField(
            'job_domain',
            'text',
            [
                'name' => 'job_domain',
                'label' => __('Domain'),
                'id' => 'job_domain',
                'title' => __('Domain'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $fieldset->addField(
            'job_city',
            'text',
            [
                'name' => 'job_city',
                'label' => __('City'),
                'id' => 'job_city',
                'title' => __('City'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $wysiwygConfig = $this->_wysiwygConfig->getConfig(['tab_id' => $this->getTabId()]);

        $fieldset->addField(
            'job_shortdescription',
            'editor',
            [
                'name' => 'job_shortdescription',
                'label' => __('Short Description'),
                'style' => 'height:36em;',
                'required' => true,
                'config' => $wysiwygConfig
            ]
        );

        $fieldset->addField(
            'job_description',
            'editor',
            [
                'name' => 'job_description',
                'label' => __('Description'),
                'style' => 'height:36em;',
                'required' => true,
                'config' => $wysiwygConfig
            ]
        );

        $fieldset->addField(
            'job_expiry',
            'date',
            [
                'name' => 'job_expiry',
                'label' => __('Expiry Date'),
                'date_format' => $dateFormat,
                'class' => 'validate-date validate-date-range date-range-custom_theme-from',
                'class' => 'required-entry',
                'style' => 'width:200px',
            ]
        );
        $fieldset->addField(
            'status',
            'select',
            [
                'name' => 'status',
                'label' => __('Status'),
                'id' => 'status',
                'title' => __('Status'),
                'values' => $this->_options->getOptionArray(),
                'class' => 'status',
                'required' => true,
            ]
        );
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
