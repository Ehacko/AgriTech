<section>
    <h2>media</h2>
    <div>
        <div class="editor">
            <ul>
                <?php
                    $query_str = "SELECT * FROM media";
                    $db_select = $db->prepare($query_str);
                    $db_select -> execute();
                    foreach( $db_select->fetchall() as $row) {
                ?>
                <?php } ?>
            </ul>
        </div>
        <div class="preview"></div>
    </div>
</section>