<?php

namespace Database\Query;

class SqlRaw
{
    public static function raw($sql, $queries)
    {
        $sql .= Join::execute($queries);
        $sql .= Where::execute($queries);
        $sql .= OrWhere::execute($queries);
        $sql .= Like::execute($queries);
        $sql .= Order::execute($queries);
        $sql .= Group::execute($queries);
        $sql .= Limit::execute($queries);
        $sql .= Offset::execute($queries);

        return $sql;
    }
}
