<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBlogs()
    {
        // Mock data for blogs
        $blogs = [
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
            [   
                'id'=> 1,
                'link' => '',
                'image_url' => 'https://s3-alpha-sig.figma.com/img/ce65/d196/13566fc6805c41d5291dd3e6c8ebd000?Expires=1705276800&Signature=SS8XlkQhiBMNgRTpOWQfR5pu7CquyNc2ivTCoQjWyS7xjK~QYn0K~QkMTCHYCNoz04DyysOvgcMIrWh9Lmjl90Yb4fSHaFtduoRKtxaRMBEzvqstKZkUPloKW1~FGncxKLhvxo8Stt01O1qUngyIlFydVv3QABABm6eWi4bh7g1tl0qwOYAfI1zcPJX5HlWqtwOVxhpPb3C5e7I-lnzM5jSPqyNi2xSYCCC7114qVZrLmKmr070OgtkGvz7Q02VpqGQHq4iTYPPWWaDhsg~XWuEQJJBX5DsNVNwXAYlV-OUD5hzYzov5jM8jt~aQIUhyuULR~NCra0LpmUKBpN7Uhg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'title' => 'Testnet 11.1 and Aleph Wallet',
                'description' => 'The Testnet has been updated with new
                improvements around the stability of the
                network. We have also introduced a new
                version of Aleph Zero Wallet, known as
                azero.dev. We have brought the Testnet 11',
                'author_avatar' => 'https://s3-alpha-sig.figma.com/img/ae21/9d48/607404eb41879966bebb90e57fbdcbfc?Expires=1705276800&Signature=fafU91e-noJ~COjMKdouueFKNkmo2JX~cCyZLNbZ3NNVbNGkJTwzMGAD~IY-fHQkRVAT8vAn4K~qexY~GxWm2Bx~vx3lGFbOQ~oV2Ybwy4xBzsoW54l~-1EnqOt2JCUVzTf3PiIvYnre-JMw88Dbhl30MDaLRBx~MKMgHYouVHgkSgTbQ2xl64vSVSfo2xgdLQikO76FvnK~ZDaOKiFmS4doTqET2wRhI4GKCQonTuYLV6pAyk1ZRRSIKzRU9Ljj3v4~HuWb~5hl~-5w~nwvG7S8igFYQoTbg-gwkfDM8vFOweDYKKZorASYw7akO~EAU2ZG8vYGYBado~GJOLKnBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4',
                'author_name' => 'Author Name 1',
                'date' => 'FEB 18 2024'
            ],
           
       
        ];

        // Pass the events data to the view
        return view('blogs', ['blogs' => $blogs]);
    }
}
