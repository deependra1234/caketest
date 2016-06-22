
<?php

$config = [
    'Templates' => [
        'adminFilterForm' => [
            'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label {{attrs}}>{{text}}</label>',
            'input' => '<input type="{{type}}" name="{{name}}" class="viewadmininpt" {{attrs}} />',
            'select' => '<div class="viewadminuserfldcont nopadmargn"><select name="{{name}}"{{attrs}} class="viewadminslct">{{content}}</select></div>',
            'inputContainer' => '<div class="viewadminuserfldcont {{required}}" type="{{type}}">{{content}}</div>',
            'submitContainer' => '<div class="viewadminuserfldcont nopadmargnalt">{{content}}</div>',
            'inputSubmit' => '<input type="{{type}}"  class="btnCls blueclr"  {{attrs}} ><input type="reset" onclick="reset(this)" value="Reset"  class="btnCls greenclr" >',
            'checkContainer' => '',],
        'longForm' => [
            'formstart' => '<form {{attrs}}>',
            'label' => '<label  {{attrs}}>{{text}}</label>',
            'input' => '<input  class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
            'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
            'error' => '<label class="error" {{attrs}}>{{content}}</label>',
            'inputContainerError' => '<div class="col-lg-6  required error" form-type="text" aria-required="true"><div class="form-group  "  {{attrs}}>{{content}}{{error}}</div></div>',
            'inputContainer' => '<div class="col-lg-6"><div class="form-group {{required}}" form-type="{{type}}">{{content}}</div></div>',
            'checkContainer' => '',],
        'fullForm' => [
            'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-10"><input type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-10"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',]
    ]
];
