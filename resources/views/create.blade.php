<form method="POST" action="{{ route('transaction.store') }}">
    @csrf

    <div class="form-group">
        <label for="no_transaction">Transaction No</label>
        <input type="text" name="no_transaction" id="no_transaction" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="transaction_date">Transaction Date</label>
        <input type="date" name="created_at" id="created_at" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="item">Item Name</label>
        <input type="text" name="item" id="item" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" name="qty" id="qty" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="add_item">Add Item</label>
        <button type="button" class="btn btn-primary" id="add_item">Add Item</button>
    </div>

    <div id="items">
        <!-- list of added items will be inserted here -->
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
    </div>

</form>