     <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle">
                      Sticky Notes
                    </a>
                  </h4>
                </div>

                <div class="col-lg-12">
                  
                  <hr>
                  <form method="post" action="input_index.php">
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="user_name" value="<?php echo $data['user_name'];?>">
                      <input type="text" class="form-control" name="judul" placeholder="Judul">
                      <textarea type="text" class="form-control" name="note" placeholder="Write..."></textarea>
                      <input type="hidden" name="tgl_note" value="<?php echo(date('Y-m-d')); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                  </form>
                </div>
              </div>
            </div>