<?php


namespace Prince\Employee\Controller\Data;

use Prince\Employee\Model\Data;
use Prince\Employee\Model\ResourceModel\Data as DataResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{
    /**
     * @var Data
     */
    private $data;
    /**
     * @var DataResourceModel
     */
    private $dataResourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param Data $data
     * @param DataResourceModel $dataResourceModel
     */
    public function __construct(
        Context $context,
        Data $data,
        DataResourceModel $dataResourceModel
    )
    {
        $this->data = $data;
        $this->dataResourceModel = $dataResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $data = $this->data->setData($params);//TODO: Challenge Modify here to support the edit save functionality
        try {
            $this->dataResourceModel->save($data);
            $this->messageManager->addSuccessMessage(__("Successfully added the Employee %1", $params['emp_name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /* Redirect back to data display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('employee');
        return $redirect;
    }
}
