<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
	<head>
	
		<?php
		require 'common/head.php';
		?>
		<link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container-fluid">
			<?php
			require 'common/nav.php';
			?>

<style media="screen">
	#mainBody {/* background: url(../images/seperator.png) repeat-x 0 0; */
		border-top:2px solid #dedede;
		padding-top: 18px;
	}
	.images {
		width:330px;
		min-height:300px;
		background-color:#f9f9f9;
		float:left;
		margin-bottom:5px;
	}
	.image-list {
		list-style:none;
		list-style-type:none;
		display:block;
	}
	.big_image {
		padding:5px;
		background-color:#fff;
		border:solid 1px #f1f1f1;
		margin-bottom:5px;
	}
	.big_image img {
		width:320px;
	}
	.image-list li {
		display:block;
		width:70px;
		height:70px;
		float:left;
		margin: 5px 3px;
		cursor: pointer;
	}
	.image-list li img {
		width: 60px; 
		padding:5px;
		border: solid 1px #f0f0f0;
		background-color: #fff;
	}
	.clear {
		clear:both;
	}
	.information {
		width: 358px;
		min-height:232px;
		margin: 0 7px 10px;
		float: left;
		border: solid #f1f1f1;
		border-width: 0 1px;
	}


</style>

<div id="mainBody">
	<div class="container">
	<div class="row">
<div class="span9">
	<ul class="breadcrumb">
	<li><a href="index.php">Əsas səhifə</a> <span class="divider">/</span></li>
	<li><a href="http://localhost/bartero/products.php?op=list&cat=1">Məhsullar</a> <span class="divider">/</span></li>
	<li class="active">Məhsul detalları</li>
	</ul>


	<div class = "images">
		<div class="image-list" id ="gallery" 
			data-toggle="modal-gallery" data-target="#modal-gallery">
			<div class= "big_image">
	
		<img src="<?php echo $product -> image ?>" data-gallery="gallery" 
				href="<?php echo $product -> image ?>" 
				alt="<?php echo $product -> title; ?>">
	</div>
	<ul class= "image-list">
		<li>
			<img itemprop="image" src="<?php echo $product -> image ?>" data-gallery="gallery" 
				href="<?php echo $product -> image ?>" 
				alt="<?php echo $product -> title; ?>">
		</li>
		<div class="clear"></div>
	</ul>
</div>
<div class="clear"></div>
</div>
<h3><?php echo $product -> title; ?> </h3>
<div class = "information">
			<p>
			<?php echo $product -> descri; ?>
			
			</p>
			<a class="btn btn-small pull-right" href="#detail">Əlavə məlumat</a>
			</div>
			
			<br class="clr"/>
		<a href="#" name="detail"></a>
		
		
		</div>
		<div class="clear"></div>
		<div class="container">
		<div class="span9 pull-right">
					<ul id="productDetail" class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">Məhsul haqqında</a></li>
						<li><a href="#profile" data-toggle="tab">Oxşar elanlar</a></li>
					</ul>
		</div>
		</div>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="home">
			<h4>Məhsul haqqında məlumat</h4>
							<table class="table table-bordered">
			<tbody>
			<tr class="techSpecRow"><th colspan="2">Detallar</th></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?php echo $product -> title; ?> </td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Modeli:</td><td class="techSpecTD2"><?php echo $product -> title; ?> </td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Barter üstünlüyü:</td><td class="techSpecTD2"><?php echo $product -> title; ?> </td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Qiyməti:</td><td class="techSpecTD2"><b><?php echo $product -> price; ?>AZN </b></td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Alınma tarixi:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Şəhər:</td><td class="techSpecTD2"> Bakı</td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Əlaqə:</td><td class="techSpecTD2"><div class="name">
			 <h4><?php echo $product -> name; ?></h4>
			 <a href="tel:<?php echo $product -> mob; ?>">	<h4 class="phone"><?php echo $product -> mob; ?></h4></a>
			 <h4><?php echo $product -> email; ?></h4>
			 </div></td></tr>
			</tbody>
			</table>

			<h4 style="margin-left: 5px;">Məlumatlar</h4>
			<p style="margin-left: 5px; margin-right=50px;">
			<?php echo $product -> descri; ?>
			</p>

	<style>
	
		textarea {
			width: 400px;
			height:80px;
			background-color: #fff;
			resize: none;
		}
		

	</style>
		<br>
	</div>
				</div>
				<div class="comment-form-container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Adınız" />
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Comment əlavə edin."></textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Göndərin" /><div id="comment-message">Əlavə olundu!</div>
            </div>

        </form>
    </div>
    <div id="output"></div>

</div>
</div>
</div>







		<style>
			.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
		
		</style>
<script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>

</div>

		<?php
		require 'common/footer.php';
 ?>
	</body>

</html>

<style media="screen">

	.services-container {

		margin-top: 20px;
		margin-bottom: 20px;

		background-color: #f2f2f2;
		display: block;
	}
	.services {
		text-align: center;
		list-style: none;
	}
	.services ul, menu, dir {
		display: block;
		margin-block-start:1em;
		margin-block-end:1em;

		margin-inline-start:40px;
	}
	.services-i-container:first-child {
		margin-left: 0;
	}
	.services-i-container {
		display: inline-block;
		vertical-align: top;

	}
	.services-i-container li {
		text-align: -webkit-match-parent;

	}
	.services-i {
		font-weight: 600;
		color: #ff0077;
		margin-top: 12px;
		line-height: 38px;
		text-decoration: underline;
		text-align: left;
		font-size: 16px;
		z-index: 1;
		display: block;
		box-sizing: border-box;
		border: 1px solid #ff0077;
		border-radius: 4px;
		padding: 0 5px 0 20px;
		background-color: #fff;
	}
	.services-i-price {
		font-weight: 600;
		position: absolute;
		border-radius: 4px;
		padding: 0 9px;
		color: #fff;
		background: #ff6617;
		line-height: 20px;
		font-size: 11px;
	}
	.price-val {
		font-weight: bold;
	}
	.services-i-price .price-cur {
		font-weight: 600;
		padding-left: 0.3em;
		left: 5px;
		vertical-align: baseline;
		font-size: 11px;
		font-style: normal;
	}
	.services-i#set_bumped {
		left: 12px;
	}

</style>


<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
