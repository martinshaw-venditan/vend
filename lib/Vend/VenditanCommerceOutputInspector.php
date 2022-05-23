<?php
namespace Vend;

class VenditanCommerceOutputInspector extends \Boris\ColoredInspector {
    public function objectVars($value) {
//        if ($value instanceof User) {
//            return array('user_id' => $value->getUserId());
//        }

        return parent::objectVars($value);
    }
}
