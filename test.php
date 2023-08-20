<?php 
use classes\Category;
use classes\Images;
require_once("includes/include.php");
// $s = Post::getAllPosts(1,true ,10 , 11);
// var_dump($s);

$s = Post::getPostById(5);
// $s = Images::getImagesByTypeId(1);
?>


<?php
$fruits = array("apple", "banana", "orange");

// Outputs "apple"
// echo $fruits[0];

// This will output the elements of the array one by one: 
// apple, banana, orange.
$s = Comment::getCommentsById1(181);
?>


<pre>
  <?php  var_dump($s); 
  // print_r($age["Ben"]);
  ?>
</pre>

<!-- <div class="post-section">
  <div class="img-section" style="background: url('<?php echo $post->img_post ?>') no-repeat center; background-position: center center; background-size: cover;">
    <div>
      <div class="drpp">
        <div class="dropdown-post" dir="ltr">
          <svg onclick="myFunction(this)" class="dropbtn-post" class="vertical" fill="#161616" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              d="M12,17 C13.1045695,17 14,17.8954305 14,19 C14,20.1045695 13.1045695,21 12,21 C10.8954305,21 10,20.1045695 10,19 C10,17.8954305 10.8954305,17 12,17 Z M12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 Z M12,3 C13.1045695,3 14,3.8954305 14,5 C14,6.1045695 13.1045695,7 12,7 C10.8954305,7 10,6.1045695 10,5 C10,3.8954305 10.8954305,3 12,3 Z"
            />
          </svg>
          <div id="myDropdown" class="dropdown-content-post" dir="rtl">
            <a href="#">ذخیره</a>
            <a href="#">برو به پست </a>
            <a href="#">درخواست ادیت</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="part1-post">
    <div class="title-post">
    <a href="http://localhost/TP/RP/Home-work/comment.php">
      <?php echo $post->title; ?>
    </a></div>
    <small class="cat-po">
      <?php echo " در گروه : ";
    foreach ($post->categories as $cat_id) { $cat_name = Category::getCategoryById($cat_id)->category_name; ?>
      <a href="?cat=<?php echo $cat_id; ?>"><?php echo $cat_name; ?></a>
      <?php
    } ?>
    </small>
  </div>
  <div class="content-post"><?php echo $summary; ?></div>

  <div class="item-post">
    <div class="visitors tooltip">
      <small class="small"> ۱۷۶۳ </small>
      <svg width="14px" height="14px" viewBox="0 -1 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.00012 7.5C7.00012 6.67157 7.67169 6 8.50012 6C9.32855 6 10.0001 6.67157 10.0001 7.5C10.0001 8.32843 9.32855 9 8.50012 9C7.67169 9 7.00012 8.32843 7.00012 7.5Z" fill="#2b2d42" />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.5001 7.49998C15.9643 7.3143 15.9642 7.31409 15.9641 7.31385L15.9633 7.31182L15.9616 7.30752L15.9558 7.29356C15.951 7.28192 15.9441 7.26564 15.9352 7.24504C15.9173 7.20385 15.8912 7.14533 15.8566 7.07195C15.7875 6.92526 15.6841 6.71871 15.5444 6.47224C15.2657 5.98029 14.8391 5.32375 14.2467 4.66552C13.0612 3.34827 11.186 2 8.50005 2C5.81406 2 3.93893 3.34827 2.75341 4.66552C2.161 5.32375 1.73445 5.98029 1.45567 6.47224C1.31601 6.71872 1.21266 6.92526 1.1435 7.07195C1.10891 7.14533 1.08282 7.20386 1.06497 7.24505C1.05604 7.26564 1.04917 7.28192 1.04433 7.29356L1.03857 7.30752L1.03682 7.31182L1.03623 7.31329C1.03614 7.31353 1.03582 7.31431 1.50006 7.5L1.03582 7.31431L0.961548 7.5L1.03582 7.68569L1.50006 7.5C1.03582 7.68569 1.03573 7.68546 1.03582 7.68569L1.03623 7.68671L1.03682 7.68818L1.03857 7.69248L1.04433 7.70644C1.04917 7.71808 1.05604 7.73436 1.06497 7.75495C1.08282 7.79614 1.10891 7.85467 1.1435 7.92805C1.21266 8.07474 1.31601 8.28128 1.45567 8.52776C1.73445 9.01971 2.161 9.67625 2.75341 10.3345C3.93893 11.6517 5.81406 13 8.50005 13C11.186 13 13.0612 11.6517 14.2467 10.3345C14.8391 9.67625 15.2657 9.01971 15.5444 8.52776C15.6841 8.28129 15.7875 8.07474 15.8566 7.92805C15.8912 7.85467 15.9173 7.79615 15.9352 7.75496C15.9441 7.73436 15.951 7.71808 15.9558 7.70644L15.9616 7.69248L15.9633 7.68818L15.9639 7.68671C15.964 7.68647 15.9643 7.68566 15.5001 7.49998L15.9643 7.6857L16.0386 7.5L15.9641 7.31385L15.5001 7.49998ZM8.50012 5C7.11941 5 6.00012 6.11929 6.00012 7.5C6.00012 8.88071 7.11941 10 8.50012 10C9.88083 10 11.0001 8.88071 11.0001 7.5C11.0001 6.11929 9.88083 5 8.50012 5Z"
          fill="#2b2d42"
        />
      </svg>
      <span class="tooltiptext">دیدگاه</span>
    </div>
    <div class="time-post">
      <?php $creation = convertDate($post->creation_time); ?>
      <small title="<?php echo $creation['hour'] . ":" . $creation['minute'] ?>">
        <?php
              #$creation = convertDate($post->creation_time);
              echo  $creation['day'] . " " . $creation['month_name'] . " " . $creation['year'];
              #echo  " توسط " . "<strong class='bold-text' style='color: #F00'>" . $post->first_name . " " . $post->last_name . "</strong>";
              ?>
      </small>
    </div>
      
  </div>
  
  <div class="comment-tn" id="smnt">
    <form method="post" style="display: none;" class="small-comment">
      <input name="name" id="name" type="text" placeholder="نام" />
      <textarea id="sm-comment" rows="1" cols="50" name="comment" form="usrform" placeholder=" کامنت "></textarea>
      <button type="button" name="submit" class="button">
        <span>
          <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="send" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon2 flat-line">
            <path id="secondary" d="M5.44,4.15l14.65,7a1,1,0,0,1,0,1.8l-14.65,7A1,1,0,0,1,4.1,18.54l2.72-6.13a1.06,1.06,0,0,0,0-.82L4.1,5.46A1,1,0,0,1,5.44,4.15Z" style="fill: rgba(255, 255, 255, 0); stroke-width: 2;"></path>
            <path
              id="primary"
              d="M7,12h4M4.1,5.46l2.72,6.13a1.06,1.06,0,0,1,0,.82L4.1,18.54a1,1,0,0,0,1.34,1.31l14.65-7a1,1,0,0,0,0-1.8L5.44,4.15A1,1,0,0,0,4.1,5.46Z"
              style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"
            ></path>
          </svg>
        </span>
        <div class="success">
          <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 29.756 29.756" style="enable-background: new 0 0 29.756 29.756;" xml:space="preserve">
            <path
              d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z"
            />
          </svg>
        </div>
      </button>
    </form>

    <div class="d-c" onclick="comment(this)">
      <svg width="20px" height="20px" class="svg-icon" viewBox="0 0 20 20">
        <path
          d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z"
        ></path>
      </svg>
      <h5 class="small">کامنتی بزارید...</h5>
    </div>
    
  </div>

  <div class="comment-tn" id="smnt">
    <form method="post" style="display: none;" class="big-comment">
      <input name="name" id="name" type="text" placeholder="نام" />
      <textarea id="sm-comment" rows="1" cols="50" name="comment" form="usrform" placeholder=" کامنت "></textarea>
      <button type="button" name="submit" class="button" onclick="send(this)" onclick="unActive(this)">
        <span>
          <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="send" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon2 flat-line">
            <path id="secondary" d="M5.44,4.15l14.65,7a1,1,0,0,1,0,1.8l-14.65,7A1,1,0,0,1,4.1,18.54l2.72-6.13a1.06,1.06,0,0,0,0-.82L4.1,5.46A1,1,0,0,1,5.44,4.15Z" style="fill: rgba(255, 255, 255, 0); stroke-width: 2;"></path>
            <path
              id="primary"
              d="M7,12h4M4.1,5.46l2.72,6.13a1.06,1.06,0,0,1,0,.82L4.1,18.54a1,1,0,0,0,1.34,1.31l14.65-7a1,1,0,0,0,0-1.8L5.44,4.15A1,1,0,0,0,4.1,5.46Z"
              style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"
            ></path>
          </svg>
        </span>
        <div class="success">
          <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 29.756 29.756" style="enable-background: new 0 0 29.756 29.756;" xml:space="preserve">
            <path
              d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z"
            />
          </svg>
        </div>
      </button>
    </form>

    <div class="d-c" onclick="bigComment(this)">
      <h5 class="small">کامنتی بزارید...</h5>
    </div>

    <div class="comment-parent d-none">
      <div class="comment">
        <div class="user">
          <div class="profile-comment">
            <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m15.078 12.94 3.457 1.572A2.5 2.5 0 0 1 20 16.788v.712a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 4 17.5v-.712a2.5 2.5 0 0 1 1.465-2.276l3.457-1.571a5 5 0 1 1 6.156 0Zm-5.117.627L5.88 15.422A1.5 1.5 0 0 0 5 16.788v.712A1.5 1.5 0 0 0 6.5 19h11a1.5 1.5 0 0 0 1.5-1.5v-.712a1.5 1.5 0 0 0-.88-1.366l-4.081-1.855A4.982 4.982 0 0 1 12 14a4.982 4.982 0 0 1-2.039-.433ZM12 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
              />
            </svg>
          </div>
          <div class="name-comment">
            <div class="reply-parent">
              <h4>فتحی علیرضا</h4>
              <div class="drpp1">
                <div class="dropdown-post" dir="ltr">
                  <svg onclick="myFunction()" class="dropbtn-post" class="vertical" fill="#080a38" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      d="M12,17 C13.1045695,17 14,17.8954305 14,19 C14,20.1045695 13.1045695,21 12,21 C10.8954305,21 10,20.1045695 10,19 C10,17.8954305 10.8954305,17 12,17 Z M12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 Z M12,3 C13.1045695,3 14,3.8954305 14,5 C14,6.1045695 13.1045695,7 12,7 C10.8954305,7 10,6.1045695 10,5 C10,3.8954305 10.8954305,3 12,3 Z"
                    />
                  </svg>
                  <div id="myDropdown" class="dropdown-content-post" dir="rtl">
                    <a href="#">ذخیره</a>
                    <a href="#">برو به پست </a>
                    <a href="#">درخواست ادیت</a>
                  </div>
                </div>
              </div>
            </div>
            <small> کاربر عادی </small>
          </div>
        </div>

        <div class="details">
          <div class="comment-text">
            <p>در گذشته انتشار اخبار تنها از طریق روزنامه و تلویزیون در گذشته انتشار اخبار تنها از طریق روزنامه و تلویزیون انجام میشد.</p>
          </div>
        </div>
      </div>
      <div class="comment">
        <div class="user">
          <div class="profile-comment">
            <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m15.078 12.94 3.457 1.572A2.5 2.5 0 0 1 20 16.788v.712a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 4 17.5v-.712a2.5 2.5 0 0 1 1.465-2.276l3.457-1.571a5 5 0 1 1 6.156 0Zm-5.117.627L5.88 15.422A1.5 1.5 0 0 0 5 16.788v.712A1.5 1.5 0 0 0 6.5 19h11a1.5 1.5 0 0 0 1.5-1.5v-.712a1.5 1.5 0 0 0-.88-1.366l-4.081-1.855A4.982 4.982 0 0 1 12 14a4.982 4.982 0 0 1-2.039-.433ZM12 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
              />
            </svg>
          </div>
          <div class="name-comment">
            <div class="reply-parent">
              <h4>فتحی علیرضا</h4>
              <div class="drpp1">
                <div class="dropdown-post" dir="ltr">
                  <svg onclick="myFunction()" class="dropbtn-post" class="vertical" fill="#080a38" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      d="M12,17 C13.1045695,17 14,17.8954305 14,19 C14,20.1045695 13.1045695,21 12,21 C10.8954305,21 10,20.1045695 10,19 C10,17.8954305 10.8954305,17 12,17 Z M12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 Z M12,3 C13.1045695,3 14,3.8954305 14,5 C14,6.1045695 13.1045695,7 12,7 C10.8954305,7 10,6.1045695 10,5 C10,3.8954305 10.8954305,3 12,3 Z"
                    />
                  </svg>
                  <div id="myDropdown" class="dropdown-content-post" dir="rtl">
                    <a href="#">ذخیره</a>
                    <a href="#">برو به پست </a>
                    <a href="#">درخواست ادیت</a>
                  </div>
                </div>
              </div>
            </div>
            <small> کاربر عادی </small>
          </div>
        </div>

        <div class="details">
          <div class="comment-text">
            <p>
              در گذشته انتشار اخبار تنها از طریق روزنامه و تلویزیون در گذشته انتشار اخبار تنها از طریق روزنامه و تلویزیون انجام میشد.در گذشته انتشار اخبار تنها از طریق روزنامه و تلویزیون در گذشته انتشار اخبار تنها از طریق روزنامه و
              تلویزیون انجام میشد.
            </p>

            <img src="images/2.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

</div> -->