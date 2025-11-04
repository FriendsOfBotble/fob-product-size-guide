<?php

namespace FriendsOfBotble\ProductSizeGuide;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('fob_product_size_guide_relations');
        Schema::dropIfExists('fob_product_size_guides');
    }
}
