<?php 
include 'Includes/dbh.inc.php';

$sql = 'SELECT * FROM Products';

$conn = OpenCon();
echo 'connection successful';
if(mysqli_query($conn, $sql)) {
    echo 'Connection Successful';
    while ($row = mysqli_fetch_array(mysqli_query($conn, $sql))) {
        echo `
        <div class='product_listing'>
            <div class='product_image'>
                <img src='$' />
            </div>
            <div class='productDescriptionWrapper'>
                <div class='product_description'>
                    <div class='product_author authorText'>Margaret Atwood</div>
                    <div class='product_title productTitle'>The handmaid’s tale</div>
                    <div class='product_review'>
                        <div class='product_star_rating_wrapper'>
                            <div id="product_star_review_bar"></div>
                            <div class='product_star_rating'>
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                            </div>
                        </div>
                        <div class='product_reviews'>
                            <a href=''>419 Reviews</a>
                        </div>
                    </div>
                    <div class='product_desc productDescription'>This novel can be interpreted as a double narrative, Offred's tale and the handmaids' tales. The night...</div>
                    <div class='product_price'>
                        <span type='final'>$6.99</span>
                        <span type='prev'>$18.99</span>
                    </div>
                    <button><span>Buy Now</span></button>
                </div>
            </div>
        </div>
        `;
    }
} else {
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
?>
<div class='Products'>
    <div class='products_categories'>
        <div>
            <span>Bestsellers</span>
            <span>Art & Fashion</span>
            <span>Biography</span>
            <span>Business</span>
            <span>Children's</span>
            <span>Education</span>
            <span>Fiction & Poetry</span>
            <span>Education</span>
            <span>Film, TV & Drama</span>
            <span>Food & Drink</span>
            <span>Film, TV & Drama</span>
            <span>Health & Wellbeing</span>
            <span>History & Politics</span>
            <span>Home & Garden</span>
            <span>Languages with Grant</span>
            <span>Sport & Hobbies</span>
            <span>Travel & Maps</span>
        </div>
    </div>
    <div class='productListWrapper'>
        <div class='product_listing'>
            <div class='product_image'>
                <img src='Images/cover1.svg' />
            </div>
            <div class='productDescriptionWrapper'>
                <div class='product_description'>
                    <div class='product_author authorText'>Margaret Atwood</div>
                    <div class='product_title productTitle'>The handmaid’s tale</div>
                    <div class='product_review'>
                        <div class='product_star_rating_wrapper'>
                            <div id="product_star_review_bar"></div>
                            <div class='product_star_rating'>
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                                <img src='Vectors/Star.svg' />
                            </div>
                        </div>
                        <div class='product_reviews'>
                            <a href=''>419 Reviews</a>
                        </div>
                    </div>
                    <div class='product_desc productDescription'>This novel can be interpreted as a double narrative, Offred's tale and the handmaids' tales. The night...</div>
                    <div class='product_price'>
                        <span type='final'>$6.99</span>
                        <span type='prev'>$18.99</span>
                    </div>
                    <button><span>Buy Now</span></button>
                </div>
            </div>
        </div>
    </div>
</div>