<?php if (!defined('THINK_PATH')) exit();?><div class="scrollable ng-scope" style="padding-top: 6px; ">
    <div class="scrollable-header section" style="padding:3px 8px">
        
    </div>

    <div class="scrollable-content section overthrow" style="padding:3px 8px">
        <form name="WithDrawDepositForm" class="ng-pristine ng-valid">
    <div class="container">
        <div class="row field-row">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_WithdrawDepositAmount">提现金额:</label>
            </div>
            <div class="col-xs-8 field ng-isolate-scope" focus-input="">
                <input name="bpprice" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.bpprice" id="WithDrawDepositForm_WithdrawDepositAmount" type="text">
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_BankName">提现银行:</label>
            </div>
            <div class="col-xs-8 field ng-isolate-scope" focus-input="">
                <input name="bankname" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.bankname" id="WithDrawDepositForm_BankName" type="text">
            </div>
        </div>
        <div class="row field-row ng-isolate-scope" focus-input="">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_BankAccountUserName">姓名:</label>
            </div>
            <div class="col-xs-8 field">
                <input name="busername" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.busername" id="WithDrawDepositForm_BankAccountUserName" type="text">
            </div>
        </div>
        <div class="row field-row ng-isolate-scope" focus-input="">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_BankAccountNumber">银行账号:</label>
            </div>
            <div class="col-xs-8 field">
                <input id="banknumber" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.banknumber" id="WithDrawDepositForm_BankAccountNumber" type="text">
            </div>
        </div>
		 <div class="row field-row ng-isolate-scope" focus-input="">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_BankAccountAddr">开户行:</label>
            </div>
            <div class="col-xs-8 field">
                <input name="branch" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.branch" id="WithDrawDepositForm_BankAccountAddr" type="text">
            </div>
        </div>
        <div class="row field-row ng-isolate-scope" focus-input="">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_TransactionPassword">交易密码:</label>
            </div>
            <div class="col-xs-8 field">
                <input name="pwd" class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.pwd" id="WithDrawDepositForm_TransactionPassword" type="password">
            </div>
        </div>
    <!--     <div class="row field-row ng-isolate-scope" focus-input="">
            <div class="col-xs-4 field-label">
                <label class="control-label" for="WithDrawDepositForm_VerifyCode">验证码:</label>
            </div>
            <div class="col-xs-4 field">
                <input class="form-control ng-pristine ng-untouched ng-valid needsclick" ng-model="vm.VerifyCode" id="WithDrawDepositForm_VerifyCode" type="text">
            </div>
            <div class="col-xs-4 field">
                <button class="btn btn-primary btn-block form-control ng-binding" type="button">短信验证</button>
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-12" style="font-size:12px; text-align:center; color:#999;">
                以上两种验证方式二选一<br>
                CIA验证：在点击后您会收到一通未接电话，<br>
                未接电话的最后四位数即为要填写的验证码。
            </div>
        </div> -->
        <div class="row field-row">
            <!-- ngRepeat: alert in alerts -->
        </div>

        <div class="row">
            <button class="btn btn-primary btn-block" ng-click="withdrawDeposit()" ng-disabled="btnWithdrawDepositDisabled" type="button">提交</button>
        </div>

    </div>
</form>


    </div>

    
</div>