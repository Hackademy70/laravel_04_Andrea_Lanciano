<x-layout>

    <form class="container mx-5 my-5" action="{{ route('contacts.send') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name='name' placeholder="Write here your name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" name="surname" placeholder="Write here your surname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Write here your email">
        </div>
        <label for="content">Message</label>
        <div class="form-floating mt-3">
            <textarea class="form-control" placeholder="Write here your comment!" name="content" style="height: 100px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

</x-layout>