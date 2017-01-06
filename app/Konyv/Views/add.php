<form action="index.php?go=add" method="post">
  <div class="row">
    <table cellpadding="0" class="search-table">
      <tbody>
      <tr>
        <td>
          Könyv címe
        </td>
        <td>
          <input name="title" type="text" placeholder="Cím">
        </td>
      </tr>
      <tr>
        <td>
          ISBN száma
        </td>
        <td>
          <input name="isbn" type="text" placeholder="ISBN">
        </td>
      </tr>
      <tr>
        <td>
          Szerző neve
        </td>
        <td>
          <input name="writer" type="text" placeholder="Szerző">
        </td>
      </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <button name="save" type="submit" value="1">
      Könyv és szerző hozzáadása
    </button>
  </div>
</form>
