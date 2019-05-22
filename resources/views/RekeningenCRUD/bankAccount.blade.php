<article class="card">
          <div class="card-content">
            <h3>Accountnummer: {{ $bankAccount->accountnumber }}</h3>
            <p>Balans: {{ $bankAccount->balance }}</p>
            <p>User: {{ $bankAccount->user_id }}</p>
            <form action="{{ action('RekeningenBeheerController@destroy', $bankAccount->accountnumber) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn btn-danger delete"
                onclick="return confirm('Weet je zeker dat je dit product wilt verwijderen?')" type="submit">
            <i class="fas fa-trash"></i> Verwijder
            </button>
            </form>
            <form action="{{ action('RekeningenBeheerController@edit', $bankAccount->accountnumber) }}" method="POST">
            <a href="{{ action('RekeningenBeheerController@edit', $bankAccount->accountnumber) }}" class="btn btn-secondary"><i
                    class="fas fa-pencil-alt"></i> Bewerk</a>
            </form>
          </div>
        </a>
</article>