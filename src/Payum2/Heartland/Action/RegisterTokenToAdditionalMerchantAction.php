<?php
namespace Payum2\Heartland\Action;

use Payum2\Heartland\Model\TokenReregistration;
use Payum2\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantRequest;
use Payum2\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantResponse;
use Payum2\Request\CaptureRequest;
use Payum2\Exception\RequestNotSupportedException;

class RegisterTokenToAdditionalMerchantAction extends BaseAction
{
    /**
     * {@inheritdoc}
     */
    public function execute($request)
    {
        /** @var $request CaptureRequest */
        if (false == $this->supports($request)) {
            throw RequestNotSupportedException::createActionNotSupported($this, $request);
        }

        /** @var TokenReregistration $model */
        $model = $request->getModel();

        /** @var RegisterTokenToAdditionalMerchantRequest $soapRequest */
        $soapRequest = $model->getRequest();

        $oldMerchantCredentials = $this->api->getMerchantCredentials($model->getMerchantName());
        $soapRequest->setCredential($oldMerchantCredentials);

        $registerToMerchantName = $soapRequest->getRegisterToMerchantCredential()->getMerchantName();
        $newMerchantCredentials = $this->api->getMerchantCredentials($registerToMerchantName);
        $soapRequest->setRegisterToMerchantCredential($newMerchantCredentials);

        $response = $this->api->getSoapClient()->RegisterTokenToAdditionalMerchant($soapRequest);

        if ($response instanceof RegisterTokenToAdditionalMerchantResponse) {
            $model->setResponse($response->getRegisterTokenToAdditionalMerchantResult());
        } else {
            $model->setResponse($response);
        }

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return
            $request instanceof CaptureRequest &&
            $request->getModel()->getRequest() instanceof RegisterTokenToAdditionalMerchantRequest
        ;
    }
}
