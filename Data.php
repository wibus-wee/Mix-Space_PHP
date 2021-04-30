<?
require('libs/Utils.php');
$top = '
{
	"ok": 1,

	"notes": [{
		"_id": "5f8c3f3b00ba7577c5f087ec",
		"title": "Mac OS X 上有什么好的远程桌面操控软件吗？",
		"nid": 1
	}],

	"posts": [{
		"_id": "5fb67fa6a4e20b086969b174",
		"title": "殖民地人民的反抗与资本主义制度的扩展",
		"slug": "history-book-two-d1",
		"category": {
			"name": "日常学习",
			"slug": "learn"
		}
	}, {
		"_id": "5fafc875940b3412b390d253",
		"title": "为你的博客添加PWA吧",
		"slug": "pwa-add",
		"category": {
			"name": "代码开发",
			"slug": "code"
		}
	}],

	"projects": [{
		"_id": "5f8c4cebd06f777badc48931",
		"name": "Typecho-Plugin-Live2D",
		"avatar": "",
		"id": "5f8c4cebd06f777badc48931"
	}],

	"says": [{
		"_id": "5f8c3d8900ba7577c5f087e5",
		"source": "网络",
		"text": "防下塔！放下她？放不下！",
		"author": "网络",
		"created": "2020-10-18T13:05:13.567Z",
		"modified": "2020-10-18T13:05:36.071Z",
		"id": "5f8c3d8900ba7577c5f087e5"
	}, {
		"_id": "5f8c3da200ba7577c5f087e6",
		"source": "五月天",
		"text": "因为痛苦太有价值，因为回忆太珍贵，所以我们更要继续往前走。",
		"author": "MayDay",
		"created": "2020-10-18T13:05:38.346Z",
		"modified": "2020-10-18T13:05:38.346Z",
		"id": "5f8c3da200ba7577c5f087e6"
	}]
}
';


$hideHomeItem = false;
if(!empty($top)){
    $json = $top;
    
    $TopItem = json_decode($json);
    $TopItemsOutput = "";

    // foreach ($TopItems as $TopItem){

        $itemNotes = $TopItem->notes;
        $itemPosts = $TopItem->posts;

        $itemSays = $TopItem->says;

        
            
        $NotesHtml .= '<div class="sub-menu">';
        foreach ($itemNotes as $NoteItem){
            $NotesHtml .= Utils::returnTopItem($NoteItem,'notes');
        }
        $NotesHtml .= '</div>';
        $TopItemsOutput .= $NotesHtml;

        $PostsHTML .= '<div class="sub-menu">';
        foreach ($itemPosts as $PostItem){
            $PostsHtml .= Utils::returnTopItem($PostItem,'post');
        }
        $PostsHtml .= '</div>';

        $TopItemsOutput .= $PostsHTML;
    
    // }
}

echo $PostsHtml;