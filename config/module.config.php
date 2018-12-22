<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\Resource;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'form_elements' => [
        'factories' => [
            Form\TextPageForm::class =>
                InvokableFactory::class
        ]
    ]
];
