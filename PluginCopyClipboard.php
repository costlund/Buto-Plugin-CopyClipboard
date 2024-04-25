<?php
class PluginCopyClipboard{
  public function widget_include(){
    wfDocument::renderElementFromFolder(__DIR__, __FUNCTION__);
  }
  public function widget_button($data){
    $data = new PluginWfArray($data);
    $data->set('data/id', '#'.$data->get('data/id'));
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data'), 'rs', true);
    wfDocument::renderElement($element);
  }
}