<?php
    namespace Genex\Resources\Components;
    use Cms\Classes\ComponentBase;
    use ApplicationException;

    class Links extends ComponentBase
    {
        public function componentDetails()
        {
            return [
                'name' => 'Links',
                'description' => 'Provides theme for companies'
            ];
        }

        public function defineProperties()
        {
            return [
                'link1' => [
                    'title' => 'Link1',
                    'description' => 'Link1 description',
                    'type' => 'string'
                ],
                'link2' => [
                    'title' => 'Link2',
                    'description' => 'Link1 description',
                    'type' => 'string'
                ],
                'link3' => [
                    'title' => 'Link3',
                    'description' => 'Link1 description',
                    'type' => 'string'
                ],
            ];
        }

        public function onRun()
        {
            $links = [$this->property('link1'),$this->property('link2'), $this->property('link3')];
            $this->page['links'] = $links;
        }

    }

?>