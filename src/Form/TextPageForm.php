<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\Resource\Form;

use Zend\Form\Element;
use Zend\Form\Form;

/**
 * Class TextPageForm
 * @package MSBios\Content\Resource\Form
 */
class TextPageForm extends Form
{
    /**
     * @inheritdoc
     *
     * @return $this|void
     */
    public function init()
    {
        parent::init();

        $this->add([
            'type' => Element\Text::class,
            'name' => 'name'
        ])->add([
            'type' => Element\Text::class,
            'name' => 'slug'
        ])->add([
            'type' => Element\Text::class,
            'name' => 'metaTitle'
        ])->add([
            'type' => Element\Text::class,
            'name' => 'metaKeywords'
        ])->add([
            'type' => Element\Text::class,
            'name' => 'metaDescription'
        ])->add([
            'type' => Element\Textarea::class,
            'name' => 'content'
        ]);

        return $this;
    }
}
