<?

class Utils{
    public static function remove_last_comma($content){
        if (substr($content,-1) == ","){ //如果一个JSON之后还有一个,的话
            return substr($content,0,strlen($content)-1);
        }else{
            return $content;
        }
    }
    public static function returnTopItem($TopItem, $type)
    {

        $ret = "";
        @$itemName = $TopItem->name;
        @$itemStatus = $TopItem->status;
        @$itemLink = $TopItem->link;
        @$itemClass = $TopItem->class;
        @$itemFeather = $TopItem->feather;
        @$itemSub = $TopItem->sub;
        @$itemTarget = $TopItem->target;


        if (@$itemTarget) {
            $linkStatus = 'target="' . $itemTarget . '"';
        } else {
            $linkStatus = 'target="_self"';
        }



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
        // <li> <a target="_self" href="xxx.com" class="auto" ><span class="nav-icon"><i data-feather="music"></i></span><span>网易云音乐</span></a></li>
        return $ret;
    }
}