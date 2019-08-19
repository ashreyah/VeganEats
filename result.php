    <h1>All Entries</h1>
    <table border=1>
        <tr>
            <th>id</th>
            <th>city</th>
            <th>state</th>
        </tr>
        <?php 
            $cnt = mysqli_connect('localhost', 'root', 'root', 'vegan21');
            $qry = "select * from locate";
            $results = mysqli_query($cnt, $qry);
            //print_r<br>($results);
            
            foreach($results as $v){
                echo '
                <tr>
                <td>'.$v['uid'].'</td>
                <td>'.$v['city'].'</td>
                <td>'.$v['state'].'</td>
            </tr>
                ';  
            }
        mysqli_close($cnt);
        
            ?>,
    </table>