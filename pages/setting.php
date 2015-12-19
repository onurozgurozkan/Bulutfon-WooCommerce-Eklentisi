<?php require __DIR__.'/head.php'; ?>

<form method="post" action="options.php">

    <?php settings_fields( 'bulutfon-settings' ); ?>
    <?php do_settings_sections( 'bulutfon-settings' ); ?>
    <table class="form-table">
        <tr><h1>Api Ayarlari</h1></tr><hr>
        <tr valign="top">
            <th scope="row">Master Key [*]:</th>
            <td><input tye="text" name="bulutfon_masterKey" placeholder="Master Key" value="<?php echo esc_attr( get_option('bulutfon_masterKey') ); ?>"  size="50"/></td>
        </tr>
        <tr valign="top">
            <th scope="row">Sms Basligi:</th>
            <td><input tye="text" name="bulutfon_sms_baslik" placeholder="Sms Başlığı" value="<?php echo esc_attr( get_option('bulutfon_sms_baslik') ); ?>" size="50"/></td>
        </tr>
        <tr valign="top">
            <th scope="row">Santral Numaralari:</th>
            <td><input tye="text" name="bulutfon_sms_numaralar" placeholder="90XXXXXXXXXX,90XXXXXXXXXX" value="<?php echo esc_attr( get_option('bulutfon_sms_numaralar') ); ?>" size="50"/></td>
        </tr>
        <tr valign="top"><th colspan="2"><h1>Sms İle Bildirim Ayarları</h1><hr/></th></tr>
        <tr valign="top"><th colspan="2"><input type="checkbox" name="bulutfon_notify_onOrderComplete" value="1"  <?php $val = get_option('bulutfon_notify_onOrderComplete'); echo !empty($val) ? 'checked' : ''?> /> Sipariş tamamlandığında sms gönder</th></tr>
        <tr valign="top"><th colspan="2"><input type="checkbox" name="bulutfon_notify_onOrderStatusChange" value="1"  <?php $val = get_option('bulutfon_notify_onOrderStatusChange'); echo !empty($val) ? 'checked' : ''?>/> Sipariş durumu değiştiğinde sms gönder</th></tr>
        <tr valign="top"><th colspan="2"><input type="checkbox" name="bulutfon_notify_onNewUser" value="1"  <?php $val = get_option('bulutfon_notify_onNewUser'); echo !empty($val) ? 'checked' : ''?>/> Yeni üye olunduğunda sms gönder</th></tr>

        <tr valign="top"><th colspan="2"><h1>Sms Gönderme Bilgileri</h1><hr/></th></tr>
        <tr valign="top>">
            <th scope="row">Tek Seferde İşlenecek Adet</th>
            <td><input type="text" name="bulutfon_sms_cronCount" value="<?php echo esc_attr( get_option('bulutfon_sms_cronCount') ); ?>" placeholder="Sms Gönderim Adet"  class="form-control" size="50" /></td>
        </tr>
        <tr valign="top"><th colspan="2">Bulutfon Opencart Eklentisi Smslerini önce kuyruğa alır ardından toplu olarak gönderim yapar.
                Aşağıdaki Cron dosyasını kullanarak sms gönderim kuyruğunu çalıştırabilirsiniz. Bu ayar her çalıştırma sırasında kuyruktan kaçar tane sms gönderileceğini belirtebileceğiniz ayardır.</th>
        </tr>
        <tr valign="top">
            <th scope="row">Link</th>
            <td><a href="#" class="button">Calistir</a></td>
        </tr>
        <tr>
            <th scope="row">Güvenlik Kodu</th>
            <td><input type="text" name="bulutfon_secureKey" value="<?php echo esc_attr( get_option('bulutfon_secureKey') ); ?>" placeholder="Güvenlik Kodu"  class="form-control" size="50"/></td>
        </tr>
        <tr><th colspan="2">Yeniden oluşturmak için boş bırakınız</th></tr>
        <tr><th colspan="2">Yukarıda yazılı adresi belli zaman aralıkları ile çalıştırsanız smsleriniz belirlediğiniz şekilde gönderilecektir.</th></tr>
    </table>
    <?php submit_button(); ?>
</form>