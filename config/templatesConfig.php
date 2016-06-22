<?php

$config = [
    'Templates' => [
        'shortForm' => [
            'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-4"><input type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-4"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',],
        'longForm' => [
            'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-6"><input type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-6"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',],
        'fullForm' => [
            'formStart' => '<form class="form-horizontal form-label-left" {{attrs}}>',
            'label' => '<label class="control-label col-md-3 col-sm-3 col-xs-12" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control col-md-7 col-xs-12" type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-6 col-sm-6 col-xs-12"><select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',
            'dateWidget' => '<div class="input-group date col col-md-6 col-sm-6 col-xs-12"><input type="text" class="form-control col-lg-6" name="{{name}}" {{attrs}} /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>',
        ],
        'inlineForm' => [
            'formStart' => '<form class="form-inline" {{attrs}}>',
            'label' => '<label  {{attrs}}>{{text}}</label>',
            'input' => '<input class="form-control " type="{{type}}" name="{{name}}" {{attrs}} />',
            'select' => '<select class="form-control  " name="{{name}}" {{attrs}}>{{content}}</select>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'submitContainer' => "{{content}}",
            'dateWidget' => '<div class="input-group date "><input  type="text"  class="form-control"    {{attrs}} name="{{name}}" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>',
            'checkContainer' => '',
        ]
    ]
];

