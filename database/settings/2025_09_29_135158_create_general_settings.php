<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        
        $this->migrator->add('general.instagram_url', 'https://www.instagram.com/fornoflatbread_lb');
        $this->migrator->add('general.instagram_active', false);
        $this->migrator->add('general.facebook_url', 'https://www.facebook.com/');
        $this->migrator->add('general.facebook_active', false);
        $this->migrator->add('general.whatsapp_number', '+96181391335');
        $this->migrator->add('general.whatsapp_number_on_top', false);
        $this->migrator->add('general.whatsapp_active', false);
        $this->migrator->add('general.phone_number', '+96181391335');
        $this->migrator->add('general.phone_active', false);
        $this->migrator->add('general.location_url', 'https://maps.app.goo.gl/Nezh55mdj5sAFiAJ6');
        $this->migrator->add('general.location_active', false);
        $this->migrator->add('general.theme', 'light');
    }
};
