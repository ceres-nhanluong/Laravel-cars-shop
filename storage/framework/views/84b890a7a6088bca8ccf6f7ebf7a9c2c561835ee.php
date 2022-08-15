<div class="tile">
    <form action="<?php echo e(route('admin.settings.update')); ?>" method="POST" role="form">
        <?php echo csrf_field(); ?>
        <h3 class="tile-title">Payment Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="stripe_payment_method">Stripe Payment Method</label>
                <select name="stripe_payment_method" id="stripe_payment_method" class="form-control">
                    <option value="1" <?php echo e((config('settings.stripe_payment_method')) == 1 ? 'selected' : ''); ?>>Enabled</option>
                    <option value="0" <?php echo e((config('settings.stripe_payment_method')) == 0 ? 'selected' : ''); ?>>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="stripe_key">Key</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter stripe key"
                    id="stripe_key"
                    name="stripe_key"
                    value="<?php echo e(config('settings.stripe_key')); ?>"
                />
            </div>
            <div class="form-group pb-2">
                <label class="control-label" for="stripe_secret_key">Secret Key</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter stripe secret key"
                    id="stripe_secret_key"
                    name="stripe_secret_key"
                    value="<?php echo e(config('settings.stripe_secret_key')); ?>"
                />
            </div>
            <hr>
            <div class="form-group pt-2">
                <label class="control-label" for="paypal_payment_method">PayPal Payment Method</label>
                <select name="paypal_payment_method" id="paypal_payment_method" class="form-control">
                    <option value="1" <?php echo e((config('settings.paypal_payment_method')) == 1 ? 'selected' : ''); ?>>Enabled</option>
                    <option value="0" <?php echo e((config('settings.paypal_payment_method')) == 0 ? 'selected' : ''); ?>>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="paypal_client_id">Client ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paypal client Id"
                    id="paypal_client_id"
                    name="paypal_client_id"
                    value="<?php echo e(config('settings.paypal_client_id')); ?>"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="paypal_secret_id">Secret ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paypal secret id"
                    id="paypal_secret_id"
                    name="paypal_secret_id"
                    value="<?php echo e(config('settings.paypal_secret_id')); ?>"
                />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/admin/settings/includes/payments.blade.php ENDPATH**/ ?>