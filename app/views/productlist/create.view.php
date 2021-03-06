<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="/"><?= $text_page ?></a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="/productlist"><?= $title_base ?></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="/productlist/create"><?= @$title ?></a></li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span><?= $text_legend ?></h2>

            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>

        <div class="box-content">
            <form autocomplete="off" class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>

                    <div class="control-group">

                        <label class="control-label"><?= $text_label_name ?></label>
                        <div class="controls">
                            <input class="form-control" required="required" type="text" name="Name" id="Name"
                                   maxlength="50" value="<?= $this->showValue('Name') ?>">
                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label"><?= $text_label_image ?></label>
                        <div class="controls">
                            <input class="form-control" type="file" name="Image" id="Image"
                                   maxlength="40" accept="image/*" value="<?= $this->showValue('Image') ?>">
                        </div>

                    </div>

                    <div class="control-group select">
                        <label class="control-label" for="typeahead"><?= $text_label_category ?></label>
                        <div class="controls">
                            <select required name="CategoryId">
                                <?php if (false !== $categories): foreach ($categories as $category): ?>
                                    <option value="<?= $category->CategoryId ?>"><?= $category->Name ?></option>
                                <?php endforeach;endif; ?>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">

                        <label class="control-label"><?= $text_label_buy_price ?></label>
                        <div class="controls">
                            <input class="form-control" required="required" type="number" name="BuyPrice" id="BuyPrice"
                                   min="1" step="0.01" max='9999999' value="<?= $this->showValue('BuyPrice') ?>">
                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label"><?= $text_label_sell_price ?></label>
                        <div class="controls">
                            <input class="form-control" required="required" type="number" name="SellPrice" id="SellPrice"
                                   min="1" step="0.01" max='9999999' value="<?= $this->showValue('BuyPrice') ?>">
                        </div>

                    </div>


                    <div class="control-group">

                        <label class="control-label"><?= $text_label_quantity ?></label>
                        <div class="controls">
                            <input class="form-control" required="required" type="number" name="Quantity" id="Quantity"
                                   min="1" step="1" value="<?= $this->showValue('Quantity') ?>">
                        </div>

                    </div>

                    <div class="control-group select">
                        <label class="control-label" for="typeahead"><?= $text_label_unit ?></label>
                        <div class="controls">
                            <select required name="Unit">
                                <option value="1"><?= $text_unit_kg ?></option>
                                <option value="2"><?= $text_table_m ?></option>
                                <option value="3"><?= $text_table_cartons ?></option>
                                <option value="4"><?= $text_table_piece ?></option>

                            </select>
                        </div>
                    </div>



                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary"><?= $text_label_save ?></button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>

                </fieldset>
            </form>

        </div>

    </div>
    <!--/span-->

</div><!--/row-->