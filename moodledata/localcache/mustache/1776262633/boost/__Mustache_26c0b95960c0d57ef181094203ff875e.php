<?php

class __Mustache_26c0b95960c0d57ef181094203ff875e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="w-100 d-flex px-2">
';
        $buffer .= $indent . '    <span class="my-auto me-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionFe741dd56b9f5ad56582f101a9686a60($context, $indent, $value);
        $buffer .= '</span>
';
        if ($partial = $this->mustache->loadPartial('tool_installaddon/marketplace_link')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFe741dd56b9f5ad56582f101a9686a60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activitychooserfootertext, tool_installaddon ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activitychooserfootertext, tool_installaddon ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
