<?php

namespace Admingate\ACL\Http\Controllers\Auth;

use Assets;
use Admingate\Base\Http\Controllers\BaseController;
use Admingate\Base\Http\Responses\BaseHttpResponse;
use Admingate\ACL\Traits\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends BaseController
{
    use SendsPasswordResetEmails;

    public function __construct(protected BaseHttpResponse $response)
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        page_title()->setTitle(trans('core/acl::auth.forgot_password.title'));

        Assets::addScripts(['jquery-validation'])
            ->addScriptsDirectly('vendor/core/core/acl/js/login.js')
            ->addStylesDirectly('vendor/core/core/acl/css/animate.min.css')
            ->addStylesDirectly('vendor/core/core/acl/css/login.css')
            ->removeStyles([
                'select2',
                'fancybox',
                'spectrum',
                'simple-line-icons',
                'custom-scrollbar',
                'datepicker',
            ])
            ->removeScripts([
                'select2',
                'fancybox',
                'cookie',
            ]);

        return view('core/acl::auth.forgot-password');
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $this->response->setMessage(trans($response))->toResponse($request);
    }
}
