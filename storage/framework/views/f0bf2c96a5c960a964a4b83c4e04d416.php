<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalDelete<?php echo e($item->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header bg-danger text-white">
                   <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Categories</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <div class="modal-body">
                    <form action="<?php echo e(url('categories/'.$item->id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <p>Are you sure want to delete category with, name <u><?php echo e($item->name); ?></u>...?</p>
                        </div>

                        <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                   <button type="submit" class="btn btn-danger">Delete</button>
                 </div>
                    </form>
                 </div>

                 
               </div>
             </div>
           </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/mangiyab/domains/blog.mangiya.id/laravel/resources/views/back/category/delete-modal.blade.php ENDPATH**/ ?>