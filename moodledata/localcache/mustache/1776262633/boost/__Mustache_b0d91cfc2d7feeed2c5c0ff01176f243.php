<?php

class __Mustache_b0d91cfc2d7feeed2c5c0ff01176f243 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a class="d-inline my-auto" href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" target="_blank" rel="noopener noreferrer">
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section4e6e0f990a47b78e395bb3cc64fc0a6c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <i
';
        $buffer .= $indent . '    class="fa fa-external-link"
';
        $buffer .= $indent . '    role="img"
';
        $buffer .= $indent . '    aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section7d132991ea5ac63e1ca9f2b1fb1646e2($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    title="';
        $value = $context->find('str');
        $buffer .= $this->section7d132991ea5ac63e1ca9f2b1fb1646e2($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '    </i>
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section4e6e0f990a47b78e395bb3cc64fc0a6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' marketplacelink, tool_installaddon ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' marketplacelink, tool_installaddon ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d132991ea5ac63e1ca9f2b1fb1646e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' opensinnewwindow, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' opensinnewwindow, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
