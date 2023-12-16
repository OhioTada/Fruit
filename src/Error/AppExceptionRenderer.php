<?php

namespace App\Error;

use Cake\Error\Renderer\WebExceptionRenderer;
use Cake\View\ViewBuilder;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LogLevel;

class AppExceptionRenderer extends WebExceptionRenderer
{
    /**
     * Renders the response for the exception.
     *
     * @return \Cake\Http\Response The response to be sent.
     */
    public function render(): ResponseInterface
    {
        $exception = $this->error;
        $code = $this->getHttpCode($exception);
        $headers = $this->request->getHeader('Accept');
        $checkHeaderApi = false;
        foreach ($headers as $header) {
            if(trim($header) == 'application/json') {
                $checkHeaderApi = true;
                break;
            }
        }

        if($code == 404 && !$checkHeaderApi) {
            $builder = new ViewBuilder();
            $builder->setTemplate('Error/index');
            $view = $builder->build();
            return $this->controller->getResponse()->withStringBody($view->render());
        }
        $message = $this->_message($exception, $code);
        $prefix = $this->controller->getRequest()->getParam('prefix');

        return parent::render();
    }
}
