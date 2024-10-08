<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=admin&action=index">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Trang ngoài</a></li>
                        <li class="nav-item"><a class="nav-link active fw-bold" href="index.php?controller=category&action=index">Thể loại</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=author&action=index">Tác giả</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=article&action=index">Bài viết</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container mt-5 mb-5">
    <a href="index.php?controller=article&action=create" class="btn btn-success">Thêm mới</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tiêu đề</th>
                    <th>Tên bài hát</th>
                    <th>Mã thể loại</th>
                    <th>Tóm tắt</th>
                    <th>Mã tác giả</th>
                    <th>Ngày viết</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if (!empty($articles)) {
                        foreach ($articles as $article) {                         
                ?>
                    <tr>
                        <th><?php echo $article->getMabviet(); ?></th>
                        <td><?php echo $article->getTieude(); ?></td>
                        <td><?php echo $article->getTenbhat(); ?></td>
                        <td><?php echo $article->getMatloai(); ?></td>
                        <td><?php echo $article->getTomtat(); ?></td>
                        <td><?php echo $article->getMatgia(); ?></td>
                        <td><?php echo $article->getNgayviet(); ?></td>

                        <td>
                            
                        <img src="../../public/images/songs/<?php echo htmlspecialchars($article->getHinhanh()); ?>" alt="" width="100" height="100">
                        </td>

                        <td><a href="?controller=article&action=edit&id=<?= $article->getMaBviet() ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a onclick="return confirm('Bạn có muốn xóa bài viết này không?');" href="index.php?controller=article&action=delete&id=<?= htmlspecialchars($article->getMabviet()) ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php
                        }
                    } else {
                        echo "<tr><td colspan='9'>Không có bài viết nào.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
    
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>