<!DOCTYPE html>

<?php require_once("header.php"); ?>
<?php require_once("navmenu.php"); ?>

  <canvas id="sortingCanvas" width="800" height="300"></canvas>

  <div id="sortingControls">
    <div class="sortingControlItem">

    </div>
    <div class="sortingControlItem">
      <input id="sortButton" value="SORT" type="button" onclick="sort()">
    </div>
    <div class="sortingControlItem">
      Sorting Algorithm<br>
      <select id="algorithm">
        <option value="selection">Selection Sort</option>
        <option value="bubble">Bubble Sort</option>
        <option value="insertion">Insertion Sort</option>
        <!--<option value="quick">Quick Sort</option>-->
      </select>
    </div>
    <div class="sortingControlItem">
      Quantity<br>
      <select id="numElements">
        <option value="8">8</option>
        <option value="16">16</option>
        <option value="32">32</option>
        <option value="64" selected="selected">64</option>
        <option value="128">128</option>
        <option value="256">256</option>
        <option value="512">512</option>
      </select>
    </div>
    <div class="sortingControlItem">
      Speed<br>
      <select id="speed">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6" selected="selected">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
  </div>

  <script src="js/sort.js"></script>

<?php require_once("footer.php"); ?>
