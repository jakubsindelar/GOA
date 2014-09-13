json.array!(@homeworks) do |homework|
  json.extract! homework, :id, :name, :subject_id, :date, :note
  json.url homework_url(homework, format: :json)
end
