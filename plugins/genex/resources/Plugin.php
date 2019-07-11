<?php
    namespace Genex\Resources;
    use System\Classes\PluginBase;

    class Plugin extends PluginBase
    {
        public function pluginDetails(){
            return [
              'name' => 'Genex',
              'description' => 'Provides wordpress theme and plugin',
              'author' => 'Developerazad',
              'icon' => 'icon-leaf'
            ];
        }


        public function registerComponents(){
            return [
                '\Genex\Resources\Components\Links' => 'resourceLinks'
            ];
        }


    }

?>