<?php $peserta = \App\User::where('role', 'users' )->get(); ?>
<!-- $user = DB::table('users')->where('name', 'John')->first(); -->

@for($i=0; $i<sizeof($peserta); $i++)
<tr>

                <td>{{$peserta[$i]->name}} </td>
            
            </tr>
@endfor