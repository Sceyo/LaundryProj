import '../Pages/Services.css'

export default function ServicesTable(){

    return(
        <>
            <table class="styled-table" style={{marginTop: '50px', border: '2px solid black'}}>
                    <thead>
                        <tr>
                        <th><h1>Full-Service Wash-Dry-Fold</h1>
                            <p>(Includes Detergent-Fab Con-Bag)</p></th>
                        <th><h1>Price</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>REGULAR CLOTHES</td>
                        <td>₱200 per load (8kg Max)</td>
                        </tr>
                        <tr>
                        <td>DENIM/JACKET</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>TOWELS</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>BED SHEETS</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>CURTAINS (W/OUT RINGS)</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>TABLE CLOTH</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>SEAT COVER</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                        <tr>
                        <td>COMFORTER (QUEEN)</td>
                        <td>₱200 per load (4kg Max)</td>
                        </tr>
                    </tbody>
                </table>
        
        </>
    )

}