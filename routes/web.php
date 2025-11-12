use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\NotificationController;

// Formato recomendado (resource):
Route::resource('products', ProdutoController::class);

// OU manualmente (corrigido):
Route::get('products', [ProdutoController::class, 'index'])->name('products.index');
Route::put('products/{produto}', [ProdutoController::class, 'update'])->name('products.update'); // Corrigido {produto}
Route::delete('products/{produto}', [ProdutoController::class, 'destroy'])->name('products.destroy'); // Corrigido {produto}

Route::get('/notify', [NotificationController::class, 'notify']);