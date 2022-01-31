<table>
    <thead>
    <tr>
        <th style="text-align: center; background-color:#327FB6;" >Empresa</th>
        <th style="text-align: center; background-color:#327FB6;">Status</th>
        <th style="text-align: center; background-color:#327FB6;">Usuário de Inserção</th>
        <th style="text-align: center; background-color:#327FB6;">Data de Inserção</th>
        <th style="text-align: center; background-color:#327FB6;">Categoria</th>
        <th style="text-align: center; background-color:#327FB6;">Título do Serviço</th>
        <th style="text-align: center; background-color:#327FB6;">Preço</th>
        <th style="text-align: center; background-color:#327FB6;">Data da Última Alteração</th>
        <th style="text-align: center; background-color:#327FB6;">Usuário da Última Alteração</th>        
        <br>
    </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
          
            <td style="text-align: center;" > {{$service->company}} </td>
            <td style="text-align: center;" > {{$service->status}} </td>
            <td style="text-align: center;" > {{$service->responsible_for_insert}} </td>
            <td style="text-align: center;" > {{$service->created_at}} </td>
            <td style="text-align: center;" > {{$service->category}} </td>
            <td style="text-align: center;" > {{$service->name}} </td>
            <td style="text-align: center;" > {{$service->price}} </td>
            <td style="text-align: center;" > {{$service->updated_at}} </td>
            <td style="text-align: center;" > {{$service->responsible_for_insert}} </td>
            
        </tr>
    @endforeach
    </tbody>
</table>