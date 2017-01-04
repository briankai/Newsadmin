<?php
use Encore\Admin\Form;
use App\Admin\Extensions\WangEditor;

Form::forget('editor');
Form::extend('editor', WangEditor::class);