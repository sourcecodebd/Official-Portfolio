  <div class="col-md-4">

          <!-- Search Widget -->
          <div data-aos="slide-up" class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                   <form data-aos="zoom-in" name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-success" type="submit">Go!</button>
                </span>
              </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div data-aos="slide-up" class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-6">
                  <ul data-aos="zoom-in" class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li>
                      <a class="categorieslink" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>

</div>

            </div>
          </div>

          <!-- Side Widget -->
          <div data-aos="slide-up" class="card my-4">
            <h5 class="card-header">Recent News</h5>
            <div class="card-body">
            <div class="sidebar">
                      <ul data-aos="zoom-in" class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a class="categorieslink" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
          </div>

            </div>
          </div>

        </div>
