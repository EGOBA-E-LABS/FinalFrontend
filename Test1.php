<?php
include('header.php');
?>

<form action="print.php" method="post">
<li id="makes_drop_down" class="droppable">
  <div id="make_name" class="selection">Select Make</div>
  <div class="arrow">▼</div>
  <div class="drop-down" style="display: block; ">
    <div class="spanner"></div>
    <ul class="drop-down-items">
      <li class="grouped-drop-down-items">
        <ul>
         <li class="drop-down-item"><a href="#" data-make-id="80000001">Acura</a></li>
         ...
        </ul>
      </li>
      <li class="grouped-drop-down-items">
        <ul>
          <li class="drop-down-item"><a href="#" data-make-id="80000015">GMC</a></li>
          ...
         </ul>
      </li>
      <li class="grouped-drop-down-items">
        <ul>
         <li class="drop-down-item"><a href="#" data-make-id="80000002">MINI</a>
         ...
        </ul>
      </li>
    </ul>
  </div>
</li>

<button type="submit" name="filter">Filter</button>
</form>
<?php
include('footer.php');
?>