<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Info Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  @include('components.adminNavbar')

  <div class="container my-5 d-flex justify-content-center align-items-center flex-column ">
    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="fw-bold text-warning mb-0">
        <i class="fa-solid fa-circle-info me-2"></i>Edit Company Info 
      </h3>
    </div>

    <!-- Info Form -->
    <div class="card shadow p-4 w-50 ">
      <form action="{{ route('admin.updateCompanyinfo' , $info->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="city" class="form-label fw-bold">City</label>
          <input type="text" class="form-control" id="city" name="city"  value="{{$info->city}}" placeholder="Enter city" required>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label fw-bold">Address</label>
          <input type="text" class="form-control" id="address" name="address"  value="{{$info->address}}" placeholder="Enter address" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label fw-bold">Email</label>
          <input type="email" class="form-control" id="email" name="email"  value="{{$info->email}}" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
          <label for="contact" class="form-label fw-bold">Contact</label>
          <input type="number" class="form-control" id="contact" name="contact"  value="{{$info->contact}}" placeholder="Enter contact number" required>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-warning fw-bold text-dark">
            <i class="fa-solid fa-paper-plane me-2"></i>Submit
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
