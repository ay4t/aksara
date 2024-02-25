<?php

/**
 * This file is part of Aksara CMS, both framework and publishing
 * platform.
 *
 * @author     Aby Dahana <abydahana@gmail.com>
 * @copyright  (c) Aksara Laboratory <https://aksaracms.com>
 * @license    MIT License
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.txt file.
 *
 * When the signs is coming, those who don't believe at "that time"
 * have only two choices, commit suicide or become brutal.
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AppNotificationsSettings extends Migration
{
    public function up()
    {
        // Add columns to table
        $this->forge->addField([
            'site_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false
            ],
            'whatsapp_api_url' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'whatsapp_api_header' => [
                'type' => 'text'
            ],
            'whatsapp_api_payload' => [
                'type' => 'text'
            ]
        ]);

        // Add primary and unique index
        $this->forge->addKey('site_id', true, true);

        // Create table
        $this->forge->createTable('notifications__settings');
    }

    public function down()
    {
        // Safe abstraction
    }
}
