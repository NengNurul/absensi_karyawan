<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawans extends Migration
{
    private string $table = "karyawans";

    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `$this->table`(
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `user_id` INT(11) NULL DEFAULT NULL,
            `address` VARCHAR(50) NULL DEFAULT NULL,
            `position` ENUM('CEO','CTO','CFO','CMO','COO','WPP') NULL DEFAULT 'CEO',
            `created_at` INT(12) NULL DEFAULT NULL,
            `updated_at` INT(12) NULL DEFAULT NULL,
            `no_hp` VARCHAR(50) NULL DEFAULT NULL,
            `gaji` INT(11) NULL DEFAULT NULL COMMENT 'per month',
            `photo` LONGTEXT NULL DEFAULT NULL,
            PRIMARY KEY (`id`),
            INDEX `address` (`address`),
            INDEX `no_hp` (`no_hp`)
        )";

        $this->db->query( $sql );
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS `$this->table`";

        $this->db->query( $sql );
    }
}
