<?php

namespace webvimark\modules\UserManagement\components;

class CssHelper{

public static function renderGridCss(){
  $css = <<<CSS
  .clear-filter .form-inline{
    display: flex!important;
    text-wrap: nowrap!important;
    align-items: center!important;
}
.clear-filter .form-inline select{
  margin-left: 10px;
}

.actions-filter .summary{
    text-align: right;
}
 .actions-filter .form-inline{
 display: flex!important;
 }
 .actions-filter .form-inline select{
  margin-right: 10px;
}

.label {
    display: inline;
    padding: 0.2em 0.6em 0.3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
}

.label-danger{
    background-color: var(--bs-danger);
}
.label-warning{
    background-color: var(--bs-warning);
}
.label-success{
    background-color: var(--bs-success);
}
.label-primary{
    background-color: var(--bs-primary);
}
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}

.pagination li{
    display: inline;
}

.pagination a, .pagination li span{
    font-size: 12px;
    line-height: 1.5;
    padding: 6px 12px;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
    float:left;
}

.pagination  .disabled  span {
    color: #777777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}
.pagination .active a {
    z-index: 3;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}

CSS;
return $css;
  //$this->registerCss($css);
}

}