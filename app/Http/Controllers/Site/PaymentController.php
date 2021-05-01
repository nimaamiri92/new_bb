<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Repositories\Admin\SettingRepository;
use App\Repositories\Site\BankGateways\BankGateway;
use Illuminate\Http\Request;

class PaymentController extends BaseController
{
    /**
     * @var SettingRepository
     */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function callbackUrl(Request $request)
    {
        $transactionResult = $request->all();
        $defaultGateway = getDefaultBankGateway();
        return BankGateway::getInstance($defaultGateway, $transactionResult)->verify();
    }
}
