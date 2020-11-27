@extends('Phase1.Phase1Layout')

@section('content')

<table class="table table-hover">
  <thead class="p1">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Compulsory/Manadatory</th>
      <th scope="col">Credit</th>
      <th scope="col">Contact Hour</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr id="row1">
      <th scope="row">1</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group">
        <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Edit </button>
        <button class="btn btn-primary btn-edit" style= "display:none" onclick = "DeleteRow()" id="delete"> Delete </button></div></td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="edit"> Edit </button></div></td>
    </tr>

    <tr style="display:none" id = "NewRow">
      <th scope="row">11</th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1">
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1">
        <option>C</option>
        <option>M</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" onclick = "AddMore_Submit()" id="submit"> Submit </button></div></td>
    </tr>
  </tbody>
</table>

@endsection