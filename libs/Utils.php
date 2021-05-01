<?

class Utils{
    public static function returnTopItem($TopItem, $type)
    {
        $ret = "";
        switch($type){
            case 'notes':
                @$nid = $TopItem->nid;
                $ret = 'NID = '.$nid;
                break;
            case 'posts':
                @$title = $TopItem->title;
                $ret = 'title = '.$title;
                break;
        }
        return $ret;
    }
}