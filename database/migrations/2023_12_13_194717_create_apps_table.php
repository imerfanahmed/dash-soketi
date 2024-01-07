<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key')->unique();
            $table->string('secret');
            $table->integer('max-connections')->default(-1);
            $table->tinyInteger('enable_client_messages')->default(1);
            $table->tinyInteger('enabled')->default(1);
            $table->integer('max_backend_events_per_sec')->default(-1);
            $table->integer('max_client_events_per_sec')->default(-1);
            $table->integer('max_read_req_per_sec')->default(-1);
            $table->integer( 'max_presence_members_per_channel' )->nullable();
            $table->integer( 'max_presence_members_size_in_kb' )->nullable();
            $table->integer( 'max_channel_name_length' )->nullable();
            $table->integer( 'max_event_channels_at_once' )->nullable();
            $table->integer( 'max_event_name_length' )->nullable();
            $table->integer( 'max_event_payload_in_kb' )->nullable();
            $table->integer( 'max_event_batch_size' )->nullable();
            $table->json('webhooks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apps');
    }
};
